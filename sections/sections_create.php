<div id="sectionModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal('sectionModal')">&times;</span>
        <h2>Create Section</h2>

        <form>
            <label>Section Title</label>
            <input type="text" placeholder="Enter section title" required>

            <label>Position</label>
            <input type="number" placeholder="Order in the course">

            <!-- <label>Course</label>
            <select required>
                <option value="">Select Course</option>
               
            </select> -->

            <label>Section Content</label>
            <textarea placeholder="Section summary"></textarea>

            <button type="submit" class="submit-btn">Save Section</button>
        </form>
    </div>
</div>